import { useEffect, useState } from 'react';
import FieldSwitch from './FieldSwitch';

const Body = (props) => {
  const { options, data, sections, activeSection, activeChild, updateData } = props;

  const [item, setItem] = useState(sections.find(s => s.name === activeSection));

  useEffect(() => {
    const section = sections.find(s => s.name === activeSection);

    if (activeChild) {
      const child = section.children.find(c => c.name === activeChild);
      setItem(child)
    } else {
      setItem(section)
    }
  }, [activeSection, activeChild])

  const { name, fields = [], description = '' } = item;
  return <>
    {description && <p className='description' dangerouslySetInnerHTML={{ __html: description }} />}

    <div className='fields'>
      {fields.map((field, i) => <Field key={i} {...{ saveType: options.saveType, data, activeSection, activeChild, field, updateData,fields }} />)}
    </div>
  </>;
};
export default Body;

const Field = ({ saveType = 'nested', data, activeSection, activeChild, field, updateData }) => {
  const { id, title, subtitle, before, after, field: fieldProps } = field;

  const [value, setValue] = useState();

  useEffect(() => {
    if (saveType === 'nested') {
      if (activeChild) {
        setValue(data?.[activeSection]?.[activeChild]?.[id] || '');
      } else {
        setValue(data?.[activeSection]?.[id] || '');
      }
    } else {
      setValue(data?.[id] || '');
    }
  }, [data, activeSection, activeChild]);
  return <div className={`field ${fieldProps === "notice" ? "" : "fieldPadding"}`}>
    {
      title && <div className={`fieldLabel ${fieldProps === "notice" ? "" : "pr15"}`}>
        <label className='label'>{title}</label>
        {subtitle && <p className='subTitle' dangerouslySetInnerHTML={{__html:subtitle}}/>}
      </div>
    }

    <div className={`fieldComponent ${!title ? "fullWidth" : ""}`} >
      {before && <div className="beforeAfterText" dangerouslySetInnerHTML={{__html:before}}/>}
      <FieldSwitch {...field} extraFields={field} value={value} onChange={val => updateData(id, val)} />
      {after && <div className="beforeAfterText" dangerouslySetInnerHTML={{ __html:after}}/>}
    </div>

  </div>
}
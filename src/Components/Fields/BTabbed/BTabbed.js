import React, { useState,useEffect } from 'react';
import "./style.css";
import FieldSwitch from '../../Main/Body/FieldSwitch';
const BTabbed = ({ fields, value, onChange }) => {
  console.log(value);
  const [activeTab, setActiveTab] = useState(0);
  const [data,setData]=useState(value || {})
  const { id = "", title = "", fields: child = "" } = fields?.[activeTab];
  useEffect(() => {
  onChange(data)
  }, [data])
  return (
    <div className="bPl-tabbed-main-wrapper">
      <div className="bPl-tabBtn-wrapper">
        {
          fields?.map((item, index) => (
            <div
              key={index}
              onClick={() => setActiveTab(index)}
              className={`bPl-single-tabBtn ${activeTab === index? 'activeTab' : ''}`}
            >
              {item?.icon && <span style={{display:"flex"}} dangerouslySetInnerHTML={{__html:item?.icon}}/> }
              <span>{item?.title}</span>
            </div>
          ))
        }
      </div>
      <div className="bPl-tabbed-body-wrapper">
        {
          child?.map((f, idx) => {
            return <div key={idx} className="bPl-tabbed-single-field">
              <div className="bPl-tabbed-field-title">{f?.title}</div>
              <div className="bPl-tabbed-field">
                <FieldSwitch {...f} extraField={f} value={value?.[id]?.[f?.id]} onChange={val => setData({ ...value, [id]: { ...value?.[id], [f?.id]: val } })} />
              </div>
            </div>
          })
        }
      </div>
    </div>
  );
};

export default BTabbed;
import React from 'react';
import "./style.scss";
const SelectImage = ({ value, onChange = () => { }, images=[],defaultValue,multiple=false }) => {
  const def = value || defaultValue
  console.log(images)
  return (
    <div className='bpl-imageSize-wrapper'>
      {
        images?.map((item, i) => <div key={i} onClick={() => {
          if (multiple) {
            if (value.includes(item.value)) {
              const newVal = value.filter(v => v !== item.value);
              onChange(newVal);
            } else {
              onChange([...value,item.value])
            }
          } else { 
            onChange(item.value)
          }
        }} className={`bpl-single-imageSize ${multiple ? def.includes(item.value) :def === item.value ? "active" : ""}`} style={{ background: item.background }}>
            <img src={item.label} alt="" />
        </div>)
      }
    </div>
  );
};

export default SelectImage;


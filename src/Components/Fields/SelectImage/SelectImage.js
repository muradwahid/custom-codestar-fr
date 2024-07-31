import React from 'react';
import "./style.scss";
const SelectImage = ({ value, onChange = () => { }, images }) => {
  const defaultValue = value > 0 ? value : 1
  return (
    <div className='bpl-imageSize-wrapper'>
      {
        images?.map((item, i) => <div key={i} onClick={() => onChange(i + 1)} className={`bpl-single-imageSize ${defaultValue === 1 + i ? "active" : ""}`} style={{ background: item.background }}>
          <div className='bpl-imgSize'>
            <img src={item.value} alt="" />
          </div>
        </div>)
      }
    </div>
  );
};

export default SelectImage;


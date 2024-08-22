import React, { useState } from "react";
import "./style.scss";
import ColorPicker from "../ColorPicker/ColorPicker";
const BColorGroup = ({ value, onChange, options, defaultValue }) => {
  const def =value || defaultValue
  const [internalValue, setInternalValue] = useState(value || defaultValue || {});
  console.log(options);
  // const handleColorChange = (newColor, id) => {
  //   const updatedValue = { ...internalValue };
  //   updatedValue[id] = newColor;
  //   setInternalValue(updatedValue);
  //   onChange(updatedValue);
  // };
  return (
    <div className="color-group-container">
      {Object.keys(options)?.map((option, index) => {
        return (
          <div key={index} className="colorGroupWrapper-main">
            <div className="colorGroupLabel">{options?.[option]}</div>
            <ColorPicker value={def?.[option]} onChange={val => onChange({ ...def, [option]: val })} defaultValue={defaultValue ? defaultValue?.[option] : ""} />
            {/* <div className="colorGroupWrapper">
              <button
                className="colorGroupBtn"
                style={{ background: internalValue[option.id] || 'transparent' }}
                onClick={() => setIsOpen((prev) => (prev === option.id ? null : option.id))}
              >
                <div style={{ margin: "-2px", borderRight: "1px solid #ccc" }}>
                  Select Color
                </div>
              </button>
            </div>
            {option.id === isOpen && (
              <div
                style={{ marginTop: "10px", width: "230px" }}
              >
                <ColorPicker
                  color={internalValue[option.id] || 'transparent'}
                  onChange={(newColor) => handleColorChange(newColor, option.id)}
                />
              </div>
            )} */}
          </div>
        );
      })}
    </div>
  );
};

export default BColorGroup;
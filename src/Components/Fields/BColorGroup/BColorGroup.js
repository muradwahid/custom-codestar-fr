import { ColorPicker } from "@wordpress/components";
import React, { useState } from "react";
import "./style.scss";
const BColorGroup = ({ value, onChange, options, default: defaultValue }) => {
  const [isOpen, setIsOpen] = useState(null);

  const [internalValue, setInternalValue] = useState(value || defaultValue || {});

  const handleColorChange = (newColor, id) => {
    const updatedValue = { ...internalValue };
    updatedValue[id] = newColor;
    setInternalValue(updatedValue);
    onChange(updatedValue);
  };

  return (
    <div className="color-group-container">
      {options?.map((option, index) => {
        return (
          <div key={index} className="colorGroupWrapper-main">
            <div className="colorGroupLabel">{option.label}</div>
            <div className="colorGroupWrapper">
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
            )}
          </div>
        );
      })}
    </div>
  );
};

export default BColorGroup;
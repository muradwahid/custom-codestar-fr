import React, { useState } from "react";

const BTextControl = ({
  type = "text",
  value,
  onChange,
  outline = "#4527a4",
  defaultValue,
  placeholder,
  readOnly = false,
  style,
  min,
  minLength,
  max,
  maxLength
}) => {
  const [inputVal,setInputVal]=useState(defaultValue)
  const id = Math.floor(Math.random() * 999999);
  return (
    <div>
      <style>{`
        .bPl-textControl-${id} {
          width: 100%;
        }
        .bPl-textControl-${id}>.bPl-textControl-${id}-input {
          width:inherit;
          padding: 0 8px;
          line-height: 2;
          min-height: 30px;
          box-shadow: 0 0 0 transparent;
          border-radius: 4px;
          border: 1px solid #8c8f94;
          background-color: #fff;
          color: #2c3338;
          transition:all 0.2s ease-in-out;
        }
        .bPl-textControl-${id}>.bPl-textControl-${id}-input:focus {
          outline: 1px solid ${outline};
          transition:all 0.2s ease-in-out;
        }
        .bPl-textControl-${id}>.bPl-textControl-${id}-input:read-only {
          background:#ccc;
        }
      `}</style>
      <div className={`bPl-textControl-${id}`}>
        <input
          className={`bPl-textControl-${id}-input`}
          style={{...style}}
          type={type}
          min={min}
          minLength={minLength}
          max={max}
          maxLength={maxLength}
          value={value ? value:inputVal}
          defaultValue={inputVal}
          placeholder={placeholder}
          readOnly={readOnly}
          onChange={(e) => {
            onChange(e.target.value)
            setInputVal(e.target.value)
          }}
        />
      </div>
    </div>
  );
};

export default BTextControl;

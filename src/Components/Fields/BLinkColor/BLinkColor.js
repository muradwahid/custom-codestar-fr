import { ColorPicker } from "@wordpress/components";
import React from "react";
import "./style.scss";
const BLinkColor = ({
  value,
  onChange,
  normal = true,
  hover = false,
  active = false,
  visited = true,
  focus = false,
  default: defaultValue = {},
}) => {
  const [isOpen, setIsOpen] = React.useState(false);
  const [internalValue, setInternalValue] = React.useState();
  const btnRef = React.useRef(null);
  const colorRef = React.useRef(null);
  React.useEffect(() => {
    const handle = (e) => {
      if (
        !btnRef?.current?.contains(e.target) ||
        !colorRef?.current?.children[0].contains(e.target)
      ) {
        // setIsOpen(false);
      }
      if (colorRef?.current?.children[0].contains(e.target)) {
        // setIsOpen(true);
      }
    };
    document.addEventListener("mousedown", handle);
    return () => {
      document.removeEventListener("mousedown", handle);
    };
  });

  const activeColor = [
    { label: "Normal", active: normal },
    { label: "Hover", active: hover },
    { label: "Active", active: active },
    { label: "Visited", active: visited },
    { label: "Focus", active: focus },
  ];
  const acColor = [];
  activeColor.map((val) => {
    if (val?.active) {
      acColor.push({ label: val?.label, active: val?.active });
    }
  });
  const options =
    Object.keys(defaultValue).length > 0
      ? Object.keys(defaultValue).map((val) => ({
        label: val?.toUpperCase(),
        active: true,
      }))
      : acColor;

  const handleColorChange = (newColor, id) => {
    const updatedValue = { ...internalValue };
    updatedValue[id] = newColor;
    setInternalValue(updatedValue);
    onChange(updatedValue);
  };



  return (
    <div className="link-color-container">
      {options?.map((option, index) => {
        return (
          <div key={index} className="linkColorWrapper-main">
            <div className="linkColorLabel">{option?.label}</div>
            <div className="linkColorWrapper">
              <button
                ref={btnRef}
                className="linkColorBtn"
                style={{ background: internalValue[option.id] || 'transparent' }}
                onClick={() => setIsOpen((prev) => (prev === index ? null : index))}
              >
                <div style={{ margin: "-2px", borderRight: "1px solid #ccc" }}>
                  Select Color
                </div>
              </button>
            </div>
            {index === isOpen && (
              <div ref={colorRef} style={{ marginTop: "10px", width: "230px" }}>
                <ColorPicker color={internalValue[option.id] || 'transparent'} oonChange={(newColor) => handleColorChange(newColor, option.id)} />
                {/* <input
                  value={value?.[i]}
                  type="color"
                  name=""
                  id=""
                  onChange={val => onChange([...value,])}
                /> */}
              </div>
            )}
          </div>
        );
      }
      )}
    </div>
  );
};

export default BLinkColor;

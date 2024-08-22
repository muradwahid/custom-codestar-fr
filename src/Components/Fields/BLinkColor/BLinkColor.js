// import { ColorPicker } from "@wordpress/components";
import React from "react";
import "./style.scss";
import ColorPicker from "../ColorPicker/ColorPicker";
const BLinkColor = ({
  value,
  onChange,
  normal = true,
  hover = false,
  active = false,
  visited = true,
  focus = false,
  defaultValue = {},
}) => {
  const def =value || defaultValue
  // const [isOpen, setIsOpen] = React.useState(false);
  // const [internalValue, setInternalValue] = React.useState(def ||{});
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
    { label: "normal", active: normal },
    { label: "hover", active: hover },
    { label: "active", active: active },
    { label: "visited", active: visited },
    { label: "focus", active: focus },
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
        label: val,
        active: true,
      }))
      : acColor;

  // const handleColorChange = (newColor, id) => {
  //   const updatedValue = { ...internalValue };
  //   updatedValue[id] = newColor;
  //   setInternalValue(updatedValue);
  //   onChange(updatedValue);
  // };


console.log(value)
  return (
    <div className="link-color-container">
      {options?.map((option, index) => {
        return (
          <div key={index} className="linkColorWrapper-main">
            <div className="linkColorLabel">{option?.label}</div>
            <ColorPicker value={def?.[option?.label]} onChange={val => onChange({ ...def, [option?.label]: val })} defaultValue={defaultValue ? defaultValue?.[option?.label]:""} />
          </div>
        );
      }
      )}
    </div>
  );
};

export default BLinkColor;

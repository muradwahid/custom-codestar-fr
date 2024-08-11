import { ColorPicker as Color } from '@wordpress/components';
import React from 'react';
import "./style.scss";
const ColorPicker = ({ value = "", onChange = () => { } }) => {
  const [isOpen, setIsOpen] = React.useState(false);
  const btnRef = React.useRef(null);
  const colorRef = React.useRef(null);
  React.useEffect(() => {
    const handle = (e) => {
      if (!btnRef?.current?.contains(e.target) && !colorRef?.current?.children[0].contains(e.target)) {
        setIsOpen(false);
      }
    };
    document.addEventListener("mousedown", handle);
    return () => {
      document.removeEventListener("mousedown", handle);
    };
  });
  return (
    <div className='colorPaletteWrapper-main'>
      <div className='colorPaletteWrapper' >
        <button ref={btnRef} className='colorPaletteBtn' style={{ background: value }} onClick={() => setIsOpen(!isOpen)}>
          <div style={{ margin: "-2px", borderRight: "1px solid #ccc" }}>Select Color</div>
        </button>
      </div>
      {isOpen && <div ref={colorRef} style={{ marginTop: "10px", width: "230px" }}>
        <Color color={value} onChange={val => onChange(val)} />
      </div>}
    </div>
  );
};

export default ColorPicker;
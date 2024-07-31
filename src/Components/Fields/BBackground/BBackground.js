import { SelectControl } from '@wordpress/components';
import React from 'react';
import { imgAttachment, imgPositionOptions, imgRepeatOptions, imgSizeOptions } from '../../../utils/options';
import ColorPalette from "../ColorPalette/ColorPalette";
import InlineMediaUpload from '../InlineMediaUpload/InlineMediaUpload';
import "./style.scss";
const BBackground = ({ value, onChange }) => {
  const [color, setColor] = React.useState(value?.color ||"#4527a4");
  const defaultValue = value || { color: "#4527a4", image: {url:""}, position: "default", repeat: "default", attachment: "default", size: "default" }
  React.useEffect(() => { 
    onChange(color)
  },[color])
  return (
    <div className='bPl-background-wrapper'>
      <ColorPalette value={color} onChange={(value) => setColor({ ...defaultValue, color: value })} />
      <InlineMediaUpload value={defaultValue?.image} onChange={(value) => onChange({ ...defaultValue, image: value })} />
      <div className='bPl-background-options'>
        <div style={{ width: "100%" }}>
          <SelectControl options={imgPositionOptions} value={defaultValue.position} onChange={(value) => onChange({ ...defaultValue, position: value })} />

        </div>
        <div style={{ width: "100%" }}>

          <SelectControl options={imgRepeatOptions} value={defaultValue.repeat} onChange={(value) => onChange({ ...defaultValue, repeat: value })} />
        </div>
        <div style={{ width: "100%" }}>
          <SelectControl options={imgAttachment} value={defaultValue.attachment} onChange={(value) => onChange({ ...defaultValue, attachment: value })} />

        </div>
        <div style={{ width: "100%" }}>

          <SelectControl options={imgSizeOptions} value={defaultValue.size} onChange={(value) => onChange({ ...defaultValue, size: value })} />
        </div>
      </div>
    </div>
  );
};

export default BBackground;
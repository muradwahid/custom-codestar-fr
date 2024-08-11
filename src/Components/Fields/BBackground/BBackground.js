import { SelectControl } from '@wordpress/components';
import React from 'react';
import { bgBlendMode, bgOrigin, gradientDirection, imgAttachment, imgPositionOptions, imgRepeatOptions, imgSizeOptions } from '../../../utils/options';
import ColorPicker from '../ColorPicker/ColorPicker';
import InlineMediaUpload from '../InlineMediaUpload/InlineMediaUpload';
import "./style.scss";
const BBackground = ({
  value, onChange, defaultValue,
  background_color = true,
  background_image = true,
  background_position = true,
  background_repeat = true,
  background_attachment = true,
  background_size = true,
  background_origin = false,
  background_clip = false,
  background_blend_mode = false,
  background_gradient = false
}) => {
  const [color, setColor] = React.useState(value?.color || "#4527a4");
  // const defaultValue = value || defaultValue || { color: "#4527a4", image: { url: "" }, position: "default", repeat: "default", attachment: "default", size: "default" }
  const defaultValues = value || defaultValue || { background_color: "#4527a4", background_gradient_color: "", background_image: "", background_position: "default", background_repeat: "default", background_attachment: "default", background_size: "default", background_origin: "default", background_clip: "default", background_blend_mode:"default" }

  const isGradient = background_gradient && !background_color;
  const isSolid = !background_gradient && background_color;

  React.useEffect(() => {
    onChange(color)
  }, [color])
  return (
    <div className='bPl-background-wrapper'>
      {isSolid && <ColorPicker value={defaultValues["background_color"]} onChange={(value) => onChange({ ...defaultValues, background_color: value })} />
      }
      {
        isGradient && <div className="bPl-background-gradient">
          <div>
            <span>From</span>
            <ColorPicker value={defaultValues["background_color"]} onChange={(value) => onChange({ ...defaultValues, background_color: value })} />
          </div>
          <div>
            <span>To</span>
            <ColorPicker value={defaultValues["background_gradient_color"]} onChange={(value) => onChange({ ...defaultValues, background_gradient_color: value })} />
          </div>
          <div>
            <span>Direction</span>
            <SelectControl options={gradientDirection} value={defaultValues["direction"]} onChange={(value) => onChange({ ...defaultValues, direction: value })} />
          </div>
        </div>
      }

      {
        background_image && <InlineMediaUpload value={defaultValues["background_image"]} onChange={(value) => onChange({ ...defaultValues, background_image: value })} />
      }
      <div className='bPl-background-options'>
        {
          background_position && <div style={{ width: "100%" }}>
            <SelectControl options={imgPositionOptions} value={defaultValues["background_position"]} onChange={(value) => onChange({ ...defaultValues, background_position: value })} />

          </div>
        }
        {
          background_repeat && <div style={{ width: "100%" }}>
            <SelectControl options={imgRepeatOptions} value={defaultValues["background_repeat"]} onChange={(value) => onChange({ ...defaultValues, background_repeat: value })} />
          </div>
        }
        {
          background_attachment && <div style={{ width: "100%" }}>
            <SelectControl options={imgAttachment} value={defaultValues["background_attachment"]} onChange={(value) => onChange({ ...defaultValues, background_attachment: value })} />
          </div>
        }
        {
          background_size && <div style={{ width: "100%" }}>
            <SelectControl options={imgSizeOptions} value={defaultValues["background_size"]} onChange={(value) => onChange({ ...defaultValues, background_size: value })} />
          </div>
        }
        {
          background_origin && <div style={{ width: "100%" }}>
            <SelectControl options={bgOrigin} value={defaultValues["background_origin"]} onChange={(value) => onChange({ ...defaultValues, background_origin: value })} />
          </div>
        }
        {
          background_clip && <div style={{ width: "100%" }}>
            <SelectControl options={bgOrigin} value={defaultValues["background_clip"]} onChange={(value) => onChange({ ...defaultValues, background_clip: value })} />
          </div>
        }
      </div>
      {
        background_blend_mode && <SelectControl options={bgBlendMode} value={defaultValues["background_blend_mode"]} onChange={(value) => onChange({ ...defaultValues, background_blend_mode: value })} />
      }
    </div>
  );
};

export default BBackground;




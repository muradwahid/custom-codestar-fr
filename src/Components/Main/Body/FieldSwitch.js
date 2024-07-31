import { SelectControl } from "@wordpress/components"
import AjaxSelectControl from "../../Fields/AjaxSelectControl/AjaxSelectControl"
import BBackground from "../../Fields/BBackground/BBackground"
import BCheckboxControl from "../../Fields/BCheckboxControl/BCheckboxControl"
import BRadioControl from "../../Fields/BRadioControl/BRadioControl"
import BSearchPage from "../../Fields/BSearchPage/BSearchPage"
import BSelectTokenField from "../../Fields/BSelectTokenField/BSelectTokenField"
import BTextControl from "../../Fields/BTextControl/BTextControl"
import BTextareaControl from "../../Fields/BTextareaControl/BTextareaControl"
import ColorPalette from "../../Fields/ColorPalette/ColorPalette"
import InlineMediaUpload from "../../Fields/InlineMediaUpload/InlineMediaUpload"
import Notice from "../../Fields/Notice/Notice"
import SelectImage from "../../Fields/SelectImage/SelectImage"
import ToggleControl from "../../Fields/ToggleControl/ToggleControl"

const FieldSwitch = ({ extraFields, label, help, field, labelPosition, value, onChange, placeholder, options = [], default: defaultValue, attributes, content, variant, type }) => {

  const fieldProps = { value, help, label, defaultValue, ...attributes }
  switch (field) {
    case 'textarea':
      return <BTextareaControl  {...fieldProps} {...attributes} onChange={val => onChange(val)} />
    case "switch": return <ToggleControl checked={value} labelPosition={labelPosition} {...fieldProps} onChange={val => onChange(val)} />
    case "selectImage": return <SelectImage images={options} {...fieldProps} onChange={val => onChange(val)} />
    case 'select':
      return <div style={{ width: "fit-content" }}><SelectControl {...fieldProps} options={options} onChange={val => onChange(val)} /></div>
    case 'pages':
    case 'posts':
    case 'categories':
    case 'roles':
    case 'users':
    case 'postTypes':
    case 'menus':
    case 'taxonomies':
      return <AjaxSelectControl field={field} value={value} onChange={val => onChange(val)} />
    case "color": return <ColorPalette  {...fieldProps} onChange={val => onChange(val)} />
    case "inlineupload": return <InlineMediaUpload {...fieldProps} render={({ open }) => <button onClick={open}>Button</button>} onChange={val => onChange(val)} />
    case "background": return <BBackground {...fieldProps} onChange={val => onChange(val)} />
    case "radio": return <BRadioControl {...fieldProps} {...extraFields} options={options} selected={value} onChange={val => onChange(val)} />
    case 'checkbox':
      return <BCheckboxControl {...extraFields} defaultValue={defaultValue} {...attributes} options={options} value={value} onChange={val => onChange(val)} />
    case 'chosen':
      return <BSelectTokenField options={options} {...fieldProps} onChange={val => onChange(val)} />
    case "notice": return <Notice content={content} variant={variant} />
    case "searchPage": return <BSearchPage value={value} onChange={val => onChange(val)} type={type} />
    default:
      return <BTextControl {...fieldProps} {...attributes} placeholder={placeholder} onChange={val => onChange(val)} />
  }
}
export default FieldSwitch
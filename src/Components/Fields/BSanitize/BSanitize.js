import React from 'react';
import "./style.scss";
const BSanitize = ({ value, onChange, sanitize }) => {
  const [text, setText] = React.useState(value ||"");
  const [curr,to, rep] = sanitize.split("_")
  function findAndReplace(originalString, target, replacement) {
    const regex = new RegExp(target, 'g'); 
    return originalString?.replace(regex, replacement);
  }

  function convertString(val) {
    return val?.toLowerCase().replace(/[^a-z0-9\s]/g, '').replace(/\s+/g, '-').trim();
  }  

  const handleBlur = () => {
    const formatted = text.toLowerCase().replace(/\s+/g, '-');
    setText(formatted);
  }; 

  React.useEffect(() => onChange(text), [text]);

  const val = sanitize === "title" ? convertString(value) : value ? findAndReplace(value, curr, rep) : text


  return (
    <div className="bPl-sanitize-filed-wrapper">
      <div className="bPl-sanitize-inputField">
        <input
          type="text"
          value={val}
          className="bPl-sanitize-field"
          onBlur={handleBlur}   
          onChange={(e) => {
            setText(e.target.value)
          }}
        />
      </div>
    </div>
  );
};

export default BSanitize;
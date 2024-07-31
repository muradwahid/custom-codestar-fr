import React from "react";

const ToggleControl = ({
  radius = "3px",
  activeBg = "#7ad03a",
  inActiveBg = "#ED6F6F",
  checked = false,
  onChange = () => { },
  label,
  labelPosition = "left"
}) => {
  const uniqId = Math.floor(Math.random() * 99999999);
  return (
    <div style={{ display: "flex" }}>
      <style>{`
      .toggleControl-wrapper-${uniqId}{
        display: flex;
        align-items:center;
        gap: 0.75rem;
        flex-direction:${labelPosition === "right" ? "row-reverse" : "row"}
      }
      .toggleControl-wrapper-${uniqId} .toggleLabel{
        color:#3c3c3c;
      }
      .toggleControl-wrapper-${uniqId} .switch {
        position: relative;
        display: inline-block;
        width: 55px;
        height: 24px;
      }
    .toggleControl-wrapper-${uniqId} .switch .toggle-input { 
      opacity: 0;
      width: 0;
      height: 0;
    }
    .toggleControl-wrapper-${uniqId} .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: ${inActiveBg};
      -webkit-transition: .3s;
      transition: .3s;
      border-radius:${radius}
    }
    .toggleControl-wrapper-${uniqId} .slider:before {
      position: absolute;
      content: "";
      height: 16px;
      width: 20px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .3s;
      transition: .3s;
      border-radius: inherit;
    }
.toggleControl-wrapper-${uniqId} .toggle-input:checked + .slider {
  background-color: ${activeBg};
}

.toggleControl-wrapper-${uniqId} .toggle-input:focus + .slider {
  box-shadow: 0 0 1px ${activeBg};
}

.toggleControl-wrapper-${uniqId} .toggle-input:checked + .slider:before {
  -webkit-transform: translateX(27px);
  -ms-transform: translateX(27px);
  transform: translateX(27px);
}
.toggleControl-wrapper-${uniqId} .switch .toggleOn{
  position: absolute;
  left:4px;
  font-size:11px;
  font-weight:600;
  color:#fff;
  top: 50%;
  transform:translateY(-50%)
}
.toggleControl-wrapper-${uniqId} .switch .toggleOff{
  position: absolute;
  right:4px;
  font-size:11px;
  font-weight:600;
  color:#fff;
  top: 50%;
  transform:translateY(-50%)
}

      `}</style>
      <div className={`toggleControl-wrapper-${uniqId}`}>
        <label className="toggleLabel" htmlFor="">
          {label}
        </label>
        <label className="switch">
          <input
            className="toggle-input"
            type="checkbox"
            onChange={() => onChange(!checked)}
            checked={checked}
          />
          <span className="slider"></span>
          {checked && <span className="toggleOn">ON</span>}
          {!checked && <span className="toggleOff">OFF</span>}
        </label>
      </div>
    </div>
  );
};

export default ToggleControl;

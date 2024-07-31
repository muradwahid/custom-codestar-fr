import React from 'react';
import "./style.scss";
const Button = ({ children, ...rest }) => {
  return (
    <button {...rest} className="nav-submitBtn">{children}</button>
  );
};

export default Button;
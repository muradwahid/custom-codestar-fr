import React from 'react';
import "./style.scss";
const Footer = ({ onSaveData }) => {
  return (
    <div className='bpl-codeStart-footer-wrapper'>
      <div className='bpl-footerBtn-wrapper'>
        <button className="nav-submitBtn" onClick={onSaveData}>Save</button>
        <button className='reset-sectionBtn'>Reset Section</button>
        <button className='resetAll-btn'>Reset All</button>
      </div>
    </div>
  );
};

export default Footer;
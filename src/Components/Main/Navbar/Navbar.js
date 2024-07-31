import React, { useState,useEffect } from 'react';
import { outdentIcon } from '../../../utils/icons';
import "./style.scss";

const Navbar = ({ isHidden, setIsHidden, options, onSaveData }) => {
  const [scrollNav, setScrollNav] = useState(false);
  useEffect(() => { 
    const stickyNav = () => {
      if (window.scrollY >= 1) {
        setScrollNav(true)
      } else {
        setScrollNav(false)
      }
    }
    window.addEventListener("scroll", stickyNav);
    return () => window.removeEventListener("scroll", stickyNav);
  },[scrollNav])
  return (
    <div className={`navBar-wrapper ${scrollNav ? "stickyNav" : ""}`}>

      <div className='navbar-logo'>
        <h1>{options.title || 'bPlugins'}</h1>
      </div>
      <div className='navBar-rightItems-wrapper'>
        <div className="navBar-alertBox">
          <small>You have unsaved changes, save your changes!</small>
        </div>
        <div onClick={() => setIsHidden(!isHidden)} className='navbar-icon'>
          {outdentIcon}
        </div>
          <div className="nav-form">
          <input type="text" name="search" id="search" placeholder="Search" />
          <button className="nav-submitBtn" onClick={onSaveData}>Save</button>
        </div>
        <button className='reset-sectionBtn'>Reset Section</button>
        <button className='resetAll-btn'>Reset All</button>
      </div>
    </div>
  );
};
export default Navbar;
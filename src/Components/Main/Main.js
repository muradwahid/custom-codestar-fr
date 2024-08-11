import React, { useState } from 'react';

import Body from './Body/Body';
import Footer from './Footer/Footer';
import './Main.scss';
import Navbar from './NavBar/Navbar';
import Sidebar from './SideBar/SideBar';

const Main = ({ options, data, setData, onSaveData }) => {
  const { sections, saveType = 'nested' } = options;

  // const items = [
  //   {
  //     title: "Overview",
  //     name: "overview",
  //     icon: faRocket,
  //     Component: Overview,
  //   },
  //   {
  //     title: "Basic Fields",
  //     name: "basic-fields",
  //     icon: circlePlus,
  //     Component: <p>Basic Fields</p>,
  //     children: [
  //       { title: "Text", name: "text", icon: rectangle },
  //       { title: "Textarea", name: "textarea", icon: rectangle },
  //       { title: "Select", name: "select", icon: faList },
  //       { title: "Checkbox", name: "checkbox", icon: faCheckbox },
  //       { title: "Radio", name: "radio", icon: faRadio },
  //     ]
  //   },
  //   {
  //     title: "Repeater Fields",
  //     name: "repeaterFields",
  //     icon: faClone,
  //     Component: <p>Color</p>,
  //     children: [
  //       {
  //         title: "Repeater",
  //         name: "repeater",
  //         // Component: Sample,
  //       },
  //       {
  //         title: "Group",
  //         name: "group",
  //         // Component: Sample,
  //       },
  //     ],
  //   },
  //   {
  //     title: "Combine Fields",
  //     icon: faBar,
  //     children: [
  //       { title: "Accordion", name: "accordion" },
  //       { title: "Tabbed", name: "tabbed" },
  //       { title: "Fieldset", name: "fieldset" },
  //     ]
  //   },
  //   {
  //     title: "Media and Upload Fields",
  //     icon: faUpload,
  //     name: "mediauploadfields",
  //     children: [
  //       { title: "Media", name: "media" },
  //       { title: "Upload", name: "upload" },
  //       { title: "Gallery", name: "gallery" },
  //     ]
  //   },
  //   {
  //     title: "Editor Fields",
  //     name: "editorFields",
  //     icon: faCode,
  //     children: [
  //       { title: "Code Editor", name: "codeeditor" },
  //       { title: "WP Editor", name: "wpeditor" },
  //     ]
  //   },
  //   {
  //     title: "Color Fields",
  //     name: "colorFields",
  //     icon: faDroplet,
  //     children: [
  //       { title: "Color", name: "color" },
  //       { title: "Link Color", name: "linkColor" },
  //       { title: "Color Group", name: "colorGroup" },
  //       { title: "Color Palette", name: "color-palette" },
  //     ]
  //   },
  //   {
  //     title: "Design Fields",
  //     name: "designFields",
  //     icon: circleHalfStroke,
  //     children: [
  //       { title: "Background", name: "background" },
  //       { title: "Typography", name: "typography" },
  //       { title: "Dimension", name: "dimension" },
  //       { title: "Spacing", name: "Spacing" },
  //       { title: "Border", name: "border" },
  //       { title: "Spinner", name: "spinner" },
  //       { title: "Number", name: "number" }
  //     ]
  //   },
  //   {
  //     title: "Additional Fields", name: "additionalFields",
  //     icon: faAsterisk,
  //     children: [
  //       { title: "Slider", name: "slider", icon: faSliders },
  //       { title: "Sorter", name: "sorter", icon: sortNumericDown },
  //       { title: "Sortable", name: "sortable", icon: arrowAlt },
  //       { title: "Switcher", name: "switcher", icon: faSwitch },
  //       { title: "Icons", name: "icons", icon: faStar },
  //       { title: "Map", name: "map", icon: faMap },
  //       { title: "Link", name: "link", icon: faLink },
  //       { title: "Date", name: "date", icon: faCalender },
  //       { title: "Date and Time", name: "dateAndTime", icon: faCalender },
  //       { title: "Image Select", name: "imageSelect", icon: faGrid },
  //       { title: "Button Set", name: "buttonSet", icon: faEllipsis },
  //     ]
  //   },
  //   {
  //     title: "Dependencies",
  //     name: "dependencies",
  //     icon: faBranch,
  //   },
  //   {
  //     title: "Validate",
  //     name: "validate",
  //     icon: faCircleCheck,
  //   },
  //   {
  //     title: "Sanitize",
  //     name: "sanitize",
  //     icon: faRotateRight,
  //   },
  //   {
  //     title: "Backup",
  //     name: "backup",
  //     icon: faShieldHalf,
  //   },
  //   {
  //     title: "Other",
  //     name: "other",
  //     icon: faBold,
  //   },
  // ];


  const [isHidden, setIsHidden] = useState(false);

  // const [activeSection, setActiveSection] = useState(sections[0].name);
  // const [activeChild, setActiveChild] = useState(sections[0].children ? sections[0].children[0].name : null);
  const [activeSection, setActiveSection] = useState("repeaterFields");
  const [activeChild, setActiveChild] = useState('repeater-1');

  const activeProps = { activeSection, setActiveSection, activeChild, setActiveChild };
  // const updateData = (id, val) => {
  //   if (saveType === 'serialized') {
  //     setData({
  //       ...data,
  //       [id]: val
  //     });
  //   } else {
  //     if (activeChild) {
  //       setData({
  //         ...data,
  //         [activeSection]: {
  //           ...data[activeSection],
  //           [activeChild]: {
  //             ...data[activeSection][activeChild],
  //             [id]: val
  //           }
  //         }
  //       });
  //     } else {
  //       setData({
  //         ...data,
  //         [activeSection]: {
  //           ...data[activeSection],
  //           [id]: val
  //         }
  //       });
  //     }
  //   }
  // }
  const updateData = (id, val) => {
    if (saveType === 'serialized') {
      setData({
        ...data,
        [id]: val
      });
    } else {
      if (activeChild) {
        setData({
          ...data,
          [activeSection]: {
            ...data[activeSection],
            [activeChild]: {
              ...(data[activeSection] && data[activeSection][activeChild]) ? data[activeSection][activeChild] : {},
              [id]: val
            }
          }
        });
      } else {
        setData({
          ...data,
          [activeSection]: {
            ...(data[activeSection] || {}),
            [id]: val
          }
        });
      }
    }
  }

  return (
    <div className='bPlSettings'>
      <Navbar isHidden={isHidden} setIsHidden={setIsHidden} options={options} onSaveData={onSaveData} />
      <div className='bPlSettingsSection'>
        <Sidebar sections={sections} {...activeProps} isHidden={isHidden} />
        <div className={`bPlSettingsBody ${isHidden ? "bPlWidthFull" : "bPlBodyWidth"}`}>
          <Body options={options} {...activeProps} updateData={updateData} sections={sections} data={data} setData={setData} />
        </div>
      </div>
      <Footer onSaveData={onSaveData} />
    </div>
  );
};

export default Main;
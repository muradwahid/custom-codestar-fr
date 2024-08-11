import { useRef, useState,useEffect } from "react";
import FieldSwitch from "../../Main/Body/FieldSwitch";
import Repeater from "./Repeater";
import Button from "../Button/Button";

const BPanelRepeater = (props) => {
  const { value, fields, onChange } = props;
  const [items, setItems] = useState([]);

  const listRef = useRef(null);
  const handleDragOver = (e) => {
    e.preventDefault();
  };

  useEffect(() => {
    let dragIdx, dropIdx;
    if (listRef?.current?.children) {
      Array.from(listRef.current?.children).forEach((child, index) => {
        //drag start
        child.ondragstart = (e) => {
          e.dataTransfer.setData("text/plain", index);
          dragIdx = index;
        };

        // drop event
        child.ondrop = () => {
          dropIdx = index;
          if (dragIdx !== dropIdx) {
            const newItems = [...items];
            const [removed] = newItems.splice(dragIdx, 1);
            newItems.splice(dropIdx, 0, removed);
            setItems(newItems);
          }
        };
      });
    }
  });


  return (
    <div ref={listRef} onDragOver={handleDragOver}>
      {fields?.map((field, i) => {
        console.log(field);
        return <div key={i}>
          <Repeater key={i}>
          <label>{field.title}</label>
            <FieldSwitch
              field={field}
              value={value}
              onChange={(val) => console.log(val)}
            />
          </Repeater>
        </div>
      })}
      <Button variant="primary">Add</Button>
    </div>
  );
};

export default BPanelRepeater;

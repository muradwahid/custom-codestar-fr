import { produce } from "immer";
import { useEffect, useRef, useState } from "react";
import FieldSwitch from "../../Main/Body/FieldSwitch";
import Button from "../Button/Button";
import Repeater from "./Repeater";

const BPanelRepeater = (props) => {
  const { value, fields, onChange } = props;
  const [items, setItems] = useState([]);

  const [data, setData] = useState([]);

  const updateData = (index, val, property = null, childProperty = null) => {
    const newData = produce(data, draft => {
      if (!draft[index]) {
        draft[index] = {};
      }
      if (!draft[index][property]) {
        draft[index][property] = {};
      }
      if (null !== property && null !== childProperty) {
        draft[index][property][childProperty] = val;
      } else if (null !== property) {
        draft[index][property] = val;
      } else {
        draft[index] = val;
      }
    });
    setData(newData);
  }

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

  useEffect(() => {
    // console.log({ default: fields.map(field => ({ [field.id]: null })), value });
    if (undefined == value || !value || value.length === 0) {
      setData(fields?.map(field => ({ [field.id]: null })));
    }


    // console.log(undefined===typeof value);

    // if (value) {
    //   setData(value);
    // }
  }, [value]);

  // useEffect(() => {
  //   onChange(data);
  // }, [data]);


  // console.log(fields);
  // console.log(data);

//   console.log(data);

// console.log(fields)
  return (
    <div ref={listRef} onDragOver={handleDragOver}>
      <Repeater>
        {fields &&fields?.map((field, i) => {
          const { id, title } = field;
          // console.log(field)
          // return <div key={i}>
          //   <label>{title}</label>
          //   <FieldSwitch
          //     {...field}
          //     value={value?.[i]?.[id]}
          //     onChange={(val) => updateData(i, val, id)}
          //   />
          // </div>
        })}
      </Repeater>

      <Button variant="primary">Add</Button>
    </div>
  );
};

export default BPanelRepeater;

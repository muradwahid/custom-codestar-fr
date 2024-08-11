
import { __experimentalInputControl as InputControl } from "@wordpress/components";
import React from 'react';
import { BMediaUpload } from "../BMediaUpload/BMediaUpload";
import Button from "../Button/Button";

const InlineMediaUpload = ({ value, onChange = () => { } }) => {
  return (
    <div style={{ display: "flex", alignItems: "center", gap: "3px" }}>
      <div style={{ width: "100%" }}>
        <InputControl style={{ borderRadius: "3px" }} value={value ? value : ""} onChange={val => onChange({ val })} />
      </div>
      <div>
        <BMediaUpload
          gallery={false}
          multiple={false}
          onSelect={(val) => onChange(val.url)}
          value={{ url: value }}
          render={({ open }) => (
            <Button onClick={open}>Upload</Button>
          )}
        />
      </div>
    </div>
  );
};

export default InlineMediaUpload;
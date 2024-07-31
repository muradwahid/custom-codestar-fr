import { Spinner } from '@wordpress/components';
import { useEffect } from 'react';

import useDynamicData from '../../../hooks/useDynamicData';
// import useWPAjax from '../../../hooks/useWPAjax';
import "./style.scss";
const AjaxSelectControl = ({ field = "posts", value, onChange }) => {
  // const settingsEl = document.getElementById('bPlSettings');
  // const nonce = bPlSettingsEl.dataset.nonce;
  // const { data: dbData = null, saveData, isLoading, error, refetch } = useWPAjax(type === "category" ? 'getCategories' : 'getPageList', { _wpnonce: nonce, type }, true);

  const { data: content = null, isLoading } = useDynamicData(field);

  // useEffect(() => {
  //   console.log(content);
  // }, [content]);

  // const options = dbData?.map((item) => {
  //   return {
  //     label: item.post_title,
  //     value: item.ID
  //   }
  // });

  if (isLoading) {
    return <Spinner />
  }
  return (
    <div className="bPl-selectControl-wrapper">
      {
        content?.length > 0 ?
          <select onChange={(e) => onChange(e.target.value)} className="bPl-selectControl" value={value}>
            <option value="default">Select a {field}</option>
            {content?.map((opt, i) => <option key={i} value={opt.value}>{opt.label}</option>)}
          </select>
          :
          <p>No data available.</p>
      }
    </div>
  );
};

export default AjaxSelectControl;
import React from 'react';
const BWPEditor = ({ value = '', onChange, defaultValue = '', media_button = true, quicktags = true, height = '180px',isLoading }) => {
  const def = value || defaultValue;
  // console.log(value)
  // const [data, setData] = React.useState(def || "");
  const editorSettings = {
    tinymce: {
      selector: "bpl-wp-editor",
      height,
      wpautop: false,
      plugins: 'charmap colorpicker compat3x directionality fullscreen hr image lists media paste tabfocus textcolor wordpress wpautoresize wpdialogs wpeditimage wpemoji wpgallery wplink wptextpattern wpview',
      toolbar1: 'formatselect bold italic underline bullist numlist blockquote alignleft aligncenter alignright link unlink wp_more fullscreen wp_adv',
      toolbar2: 'strikethrough hr alignjustify forecolor pastetext removeformat charmap outdent indent undo redo wp_help'
    },

    quicktags,
    mediaButtons: media_button,
    paste_block_drop: true,
    paste_data_images: true,
    paste_as_text: true,
    content_style:
      "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }",
  }



  window.onload = () => {
    wp.editor.initialize(`bpl-wp-editor`, editorSettings);
  }

  const editor = window.tinymce.editors['bpl-wp-editor'];
  if (editor) {
    // editor.on('focus', () => {
    //   console.log("focused");
    // })
    // editor.on('blur', () => {
    //   // const content = editor?.getContent();
    //   // console.log(content);
    //   // onChange(JSON.stringify(content))
    //   editor.setContent(def);
    //   console.log("blur")
    // })
    // editor.setContent(JSON.parse(def));
    editor.on('keyup', () => {
      const content = editor?.getContent();
      onChange(content)
      
    });
  }
  React.useEffect(() => {
    return () => {
      wp.editor.remove('bpl-wp-editor');
    };
  }, [])

  React.useEffect(() => {
    if (editor) {
      editor.setContent(def);
    }
  }, [isLoading])
  // React.useEffect(() => {
  //   if (editor) {
  //     editor.setContent(value);
  //   }
  // }, [])
  return (
    <div>
      <style>{`
        #bpl-wp-editor{
          border:none !important;
        }
        #bpl-wp-editor:focus{
          border:none !important;
          outline: none !important;
          box-shadow:none !important;
        }
      `}</style>
      <textarea style={{ width: "100%" }} id={`bpl-wp-editor`} className='bpl-wp-editor' ></textarea>
    </div>
  )
}
export default BWPEditor
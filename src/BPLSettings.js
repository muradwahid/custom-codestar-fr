import { useEffect, useState } from 'react';
import Main from './Components/Main/Main';
import useWPAjax from './hooks/useWPAjax';

const BPLSettings = props => {
	const { options, nonce } = props;

	const { data: dbData = null, saveData, isLoading, error, refetch } = useWPAjax('bPlSettingsOptions', { _wpnonce: nonce }, true);

	const [data, setData] = useState({});
	// First Fetch
	useEffect(() => {
		if (!isLoading && dbData) {
			setData({ ...dbData });
		}
	}, [dbData, isLoading]);

	const onSaveData = () => {
		if (!isLoading) {
			saveData({ jsdata: JSON.stringify(data) });
		}
	}

	// const options = {
	// 	'id': 'prefixData',
	// 	'title': 'bPlugins Settings',
	// 	// 'saveType': '', // 'serialized' : 'nested'
	// 	sections: [
	// 		{
	// 			'name': 'overview',
	// 			'title': 'Overview',
	// 			'icon': faRocket,
	// 			fields: [
	// 				{
	// 					'id': 'overviewName',
	// 					'label': 'Overview Name',
	// 					'help': 'Enter your Overview name here',
	// 					'field': 'text',
	// 				}
	// 			]
	// 		},
	// 		{
	// 			'name': 'editor',
	// 			'title': 'Editor',
	// 			'description': 'Editor description',
	// 			'icon': faRocket,
	// 			children: [
	// 				{
	// 					'name': 'code',
	// 					'title': 'Code',
	// 					'icon': faRocket,
	// 					fields: [
	// 						{
	// 							'id': 'codeEditorName',
	// 							'label': 'Code Editor Name',
	// 							'help': 'Enter your code editor name here',
	// 							'field': 'text',
	// 						}
	// 					]
	// 				},
	// 				{
	// 					'name': 'wp',
	// 					'title': 'WP',
	// 					'icon': faRocket,
	// 					fields: [
	// 						{
	// 							'id': 'wpEditorName',
	// 							'label': 'WP Editor Name',
	// 							'help': 'Enter your wp editor name here',
	// 							'field': 'textarea',
	// 						}
	// 					]
	// 				}
	// 			]
	// 		}
	// 	]
	// }

	return <>
		<Main options={options} data={data} setData={setData} onSaveData={onSaveData} />
		{/* <Modal /> */}
	</>;
}
export default BPLSettings;
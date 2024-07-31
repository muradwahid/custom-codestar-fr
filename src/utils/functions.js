export function findItemByName(items, name) {
  for (const item of items) {
    if (item.name === name) {
      return item;
    }
    if (item.children) {
      const foundItem = findItemByName(item.children, name);
      if (foundItem) {
        return foundItem;
      }
    }
  }
  return null;
}

export const getParentObjectByValue = (items, name) => {
  const key = items.filter(item => item.children && item.children.find(child => child.name === name))
  return key[0]
}

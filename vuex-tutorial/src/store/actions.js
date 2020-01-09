export const addNotification = ({ commit }, notification) => {
    commit('PUSH_NOTIFICATION', notification);
}

export const removeNotification = ({ commit }, notification) => {
    commit('REMOVE_NOTIFICATION', notification);
}
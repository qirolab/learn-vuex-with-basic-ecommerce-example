export const PUSH_NOTIFICATION = (state, notification) => {
    state.notifications.push({
        ...notification,
        id: (Math.random().toString(36) + Date.now().toString(36)).substr(2)
    })
}

export const REMOVE_NOTIFICATION = (state, notificationToRemove) => {
    state.notifications = state.notifications.filter(notification => {
        return notification.id != notificationToRemove.id;
    })
}
// {"title": "test", "body":"this is a test notify", "url": "https://azhadev.ir"}
// self.addEventListener("push", (event)=>{
//     notification = event.data.json()
//     event.waitUntil(
//         self.registration.showNotification(notification.title, {
//             body: notification.body,
//             icon: "/assets/images/logo_stork.png",
//             data:{
//                 notifURL: notification.url
//             }
//         })
//     )
// })

// self.addEventListener('notificationclick', (event)=>{
//     event.waitUntil(
//         clients.openWindow(event.notification.data.notifURL)
//     )
// })

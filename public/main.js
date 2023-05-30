// if ("serviceWorker" in navigator) {
//     navigator.serviceWorker.register("/sw.js")
// }

// if (Notification.permission != "granted") {
//     document.getElementById('perm_notify').addEventListener('click', (e)=>{
//         Notification.requestPermission().then(resPerm=>{
//             console.log(resPerm);
//             if (resPerm == "granted") {
//                 navigator.serviceWorker.ready.then(sw=>{
//                     sw.pushManager.subscribe({
//                         userVisibleOnly: true,
//                         applicationServerKey:"BNbqX8M5NJJfs_IcL_5Gfisx7FkOYHtYniD4QMJq1RB4DeQsOmGo3lO-zzurFEqTUwtrqQHKb62p_TzxPU552yI"
//                     }).then(subscription=>{
//                         fetch("/api/push-subscribe", {
//                             method:"post",
//                             body:JSON.stringify(subscription)
//                         }).then(()=>{
//                             alert("ok")
//                         })
//                     })
//                 })
//             }
//         })
//     })
// }


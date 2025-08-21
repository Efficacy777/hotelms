import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

const host = import.meta.env.VITE_PUSHER_HOST ?? '127.0.0.1';
const port = Number(import.meta.env.VITE_PUSHER_PORT ?? 6001);
const scheme = import.meta.env.VITE_PUSHER_SCHEME ?? 'http';
const key = import.meta.env.VITE_PUSHER_APP_KEY ?? 'local';
const cluster = import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1';

window.Echo = new Echo({
  broadcaster: 'pusher',
  key,
  cluster,
  wsHost: host,
  wsPort: port,
  wssPort: port,
  forceTLS: scheme === 'https',
  enabledTransports: ['ws', 'wss'],
});
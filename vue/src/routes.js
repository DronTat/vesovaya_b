import General from './components/General'
import Journal from './components/Journal'
import Catalog from './components/Catalog'
import Weight from './components/Weight'

export const routes = [
    { path: '/', component: General },
    { path: '/journal', component: Journal },
    { path: '/catalog', component: Catalog },
    { path: '/weight', component: Weight },
    { path: '/general', redirect: '/'},
    { path: '*'}
];
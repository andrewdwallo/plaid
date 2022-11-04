require('./bootstrap');
import Alpine from 'alpinejs'
import JQuery from 'jquery'
import Focus from '@alpinejs/focus'
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'
import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm'

Alpine.plugin(Focus)
Alpine.plugin(JQuery)
Alpine.plugin(FormsAlpinePlugin)
Alpine.plugin(NotificationsAlpinePlugin)
 
window.Alpine = Alpine
 
Alpine.start()

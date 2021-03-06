/*
 * File: Sencha/FakturyHome/app/store/WykresGrupyStore.js
 *
 * This file was generated by Sencha Architect version 2.1.0.
 * http://www.sencha.com/products/architect/
 *
 * This file requires use of the Ext JS 4.1.x library, under independent license.
 * License of Sencha Architect does not include license for Ext JS 4.1.x. For more
 * details see http://www.sencha.com/license or contact license@sencha.com.
 *
 * This file will be auto-generated each and everytime you save your project.
 *
 * Do NOT hand edit this file.
 */

Ext.define('MyApp.store.WykresGrupyStore', {
    extend: 'Ext.data.Store',

    requires: [
        'MyApp.model.WykresGrupy'
    ],

    constructor: function(cfg) {
        var me = this;
        cfg = cfg || {};
        me.callParent([Ext.apply({
            storeId: 'WykresGrupyStore',
            model: 'MyApp.model.WykresGrupy',
            sortRoot: 'data',
            proxy: {
                type: 'direct',
                directFn: WykresGrupy.getList,
                reader: {
                    type: 'json'
                }
            }
        }, cfg)]);
    }
});
pimcore.registerNS("pimcore.plugin.eos");

pimcore.plugin.eos = Class.create(pimcore.plugin.admin, {
    getClassName: function() {
        return "pimcore.plugin.eos";
    },

    initialize: function() {
        pimcore.plugin.broker.registerPlugin(this);
    },

    pimcoreReady: function (params,broker){
        // alert("Example Ready!");
    }
});

var eosPlugin = new pimcore.plugin.eos();


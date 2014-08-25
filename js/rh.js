(function($) {
    $.rh = {
        options: {},
        init: function(options) {
            this.options = options;
            this.initButtons();
            return this;
        },
        initButtons: function(){
            var self = this;
            $('#registration-bt').click(function(){
                self.dialog();
                return false;
            });
        },
        dialog: function() {
            var showDialog = function() {
                $('#registration-dialog').waDialog({
                });
            };
            var d = $('#registration-dialog');
            var p;
            if (!d.length) {
                p = $('<div></div>').appendTo('body');
            } else {
                p = d.parent();
            }

            p.load('?plugin=rh&action=dialog', showDialog);
        }
    };
})(jQuery); 
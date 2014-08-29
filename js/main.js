var setIndexHoverEffect = function() {
    $(document).on('mouseover', '.apartment_type', function(elem) {
        self = this;
        types = $('.apartment_type')
        other_types = types.filter(function(index, type) {
            return type != self;
        });

    });
}
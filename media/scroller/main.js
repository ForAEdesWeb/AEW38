window.scroller = function (window, document, execute_dom, max_scroll_px, side) {
    this.window = window;
    this.document = document;
    this.execute_dom = execute_dom;

    this.dom_start_px = 0;
    this.dom_end_px = 0;

    this.now_screen_start = 0;
    this.now_screen_end = 0;
    this.screen_height = 0;
    this.scroll_block_height = 0;
    this.max_scroll_px = max_scroll_px;

    this.total_scroll_px = 0;
    this.total_scroll_move_px = 0;
    this.each_scroll_move_px = 0;

    this.side = side;

    this.flush_all = function () {
        this.screen_height        = this.window.innerHeight;
        this.now_screen_start     = this.document.body.scrollTop;
        this.now_screen_end       = this.document.body.scrollTop + this.screen_height;

        this.scroll_block_height  = this.execute_dom.offsetHeight;
        this.dom_start_px         = this.execute_dom.offsetTop;
        this.dom_end_px           = this.execute_dom.offsetTop + this.scroll_block_height;

        this.total_scroll_px      = this.max_scroll_px - this.window.innerWidth;
        this.total_scroll_move_px = this.screen_height + (this.scroll_block_height * 2);
        this.each_scroll_move_px  = this.total_scroll_move_px / (this.total_scroll_px - 1);

        var is_scroll_in_start = (this.dom_start_px < this.now_screen_end);
        var is_scroll_in_end   = (this.dom_end_px > this.now_screen_start);
        var is_in = (is_scroll_in_start && is_scroll_in_end);
        var is_not_in = !(is_in);

        if (is_not_in)
        {
            return true;
        }

        var scroll_px = this.now_screen_start * this.each_scroll_move_px;
        var start_px = 0;

        if (side)
        {
            var scroll_px = this.now_screen_start * this.each_scroll_move_px * -1;
            var start_px = this.max_scroll_px;
        }

        this.execute_dom.style.backgroundPositionX = (scroll_px + start_px).toString() + "px";

        return true;
    };
};

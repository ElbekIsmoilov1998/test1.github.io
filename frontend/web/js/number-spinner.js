(function($) {
    $.fn.htmlNumberSpinner = function () {

        /* creating the counter buttons */
        $(this).append("<div class='btn decrementer'><svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n" +
            "<path d=\"M14.25 8.25H3.75C3.33579 8.25 3 8.58579 3 9C3 9.41421 3.33579 9.75 3.75 9.75H14.25C14.6642 9.75 15 9.41421 15 9C15 8.58579 14.6642 8.25 14.25 8.25Z\" fill=\"#306BF5\"/>\n" +
            "</svg></div> <input class='number-input' type='number'/> <div class='btn incrementer'><svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n" +
            "<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M9 3.75C9.41423 3.75 9.75 4.08579 9.75 4.5V8.25H13.5C13.9142 8.25 14.25 8.58577 14.25 9C14.25 9.41423 13.9142 9.75 13.5 9.75H9.75V13.5C9.75 13.9142 9.41423 14.25 9 14.25C8.58577 14.25 8.25 13.9142 8.25 13.5V9.75H4.5C4.08579 9.75 3.75 9.41423 3.75 9C3.75 8.58577 4.08578 8.25 4.5 8.25H8.25V4.5C8.25 4.08579 8.58577 3.75 9 3.75Z\" fill=\"#306BF5\"/>\n" +
            "</svg></div>");


        /* default value and variables and jquery elements*/
        var defaultValue = 0, inputValue;
        var numberInput$ = $(this).find('.number-input');
        var incrementerEl$ = $(this).find('.incrementer');
        var decrementerEl$ = $(this).find('.decrementer');

        /* hide the default number input spinner */
        $(this).append("<style>" +
            "input[type=number]::-webkit-inner-spin-button, \n" +
            "input[type=number]::-webkit-outer-spin-button { \n" +
            "    -webkit-appearance: none;\n" +
            "    -moz-appearance: none;\n" +
            "    appearance: none;\n" +
            "    margin: 0; \n" +
            "}</style>");

        /* styling the counter buttons */
        // $(this).find('.btn').css({"display":"inline-block", "width":"50px", "height":"30px", "font-size":"25px", "text-align":"center", "vertical-align":"middle", "line-height":"1", "cursor":"pointer", "user-select":"none"});
        // incrementerEl$.css({"background-color":"slateblue", "color":"white", "border": "1px solid slateblue"});
        // decrementerEl$.css({"background-color":"hotpink", "color":"white", "font-size":"25px", "border": "1px solid hotpink"});
        // numberInput$.css({
        //     "background-color":"white",
        //     "border": "1px solid",
        //     "color":"black",
        //     "text-align":"center",
        //     "width":"55px",
        //     "font-size":"18px",
        //     "line-height":"normal",
        //     "padding":"0",
        //     "outline":"none",
        //     "border-left-color": "hotpink",
        //     "border-right-color": "slateblue",
        //     "border-top-color": "lightblue",
        //     "border-bottom-color": "lightblue"
        // });


        /* props - dynamic attributes */
        var minAttributeValue = $(this).attr("min");
        var maxAttributeValue = $(this).attr("max");
        var stepAttributeValue = $(this).attr("step");

        if(minAttributeValue){
            numberInput$.attr("min",+minAttributeValue);
        }

        if(maxAttributeValue){
            numberInput$.attr("max", +maxAttributeValue);
        }

        if(stepAttributeValue){
            numberInput$.attr("step", +stepAttributeValue);
        }


        /* set the default value into the input */
        inputValue = minAttributeValue ? minAttributeValue: defaultValue;
        numberInput$.val(inputValue);

        /* incrementer functionality */
        incrementerEl$.click(function () {
            var parentEl = $(this).parent();
            inputValue = parentEl.find('.number-input').val();
            if(maxAttributeValue){
                if(maxAttributeValue==inputValue){
                    return;
                }
            }
            if(stepAttributeValue){
                inputValue = parentEl.find('.number-input').val();
                parentEl.find('.number-input').val((+inputValue)+(+stepAttributeValue));
                return;
            }
            inputValue = parentEl.find('.number-input').val();
            parentEl.find('.number-input').val(++inputValue);
        });

        /* decrementer functionality */
        decrementerEl$.click(function () {
            var parentEl = $(this).parent();
            inputValue = parentEl.find('.number-input').val();
            if(minAttributeValue){
                if(minAttributeValue==inputValue){
                    return;
                }
            }
            if(stepAttributeValue){
                inputValue = parentEl.find('.number-input').val();
                parentEl.find('.number-input').val((+inputValue)-(+stepAttributeValue));
                return;
            }
            inputValue = parentEl.find('.number-input').val();
            parentEl.find('.number-input').val(--inputValue);
        })

        numberInput$.change(function () {
            if(!maxAttributeValue || !minAttributeValue) return;
            var currentValue = $(this).val();
            if((+currentValue)>(+maxAttributeValue)){
                $(this).val(maxAttributeValue)
                return;
            }
            if((+currentValue)<(+minAttributeValue)){
                $(this).val(minAttributeValue)
                return;
            }
        })

    };

    $.fn.getSpinnerValue = function () {
        return $(this).find('.number-input').val();
    }

}(jQuery));

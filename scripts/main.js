window.addEventListener("DOMContentLoaded", main, false);

function main()
{
    
}

(function Calculator()
{
    if(!window.Calculator)
    {
        window.Calculator = {
            current: 0,
            contributions: 0,
            roi: 0,
            years: 0,
            results: 0,
            getData: function getData(source)
            {
                var sanitizedSource = source.replace(/[^\d.]/gi, "");
                sanitizedSource = parseFloat(sanitizedSource);
                if(isNaN(sanitizedSource))
                {
                    sanitizedSource = 0;
                }
                return sanitizedSource;
            }
        };
    }
}());
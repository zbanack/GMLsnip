<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
    <head>
        <meta charset="utf-8" />
        <title>GMLsnip API</title>

        <script src="../js/gml_snip.js"></script>
        <script src="../js/gml_syntax.js"></script>
        <script src="../js/docs.js"></script>

        <script>

            /**
             * GMLsnip API
             * URL params
             *
             * ?input_str
             * &snippet_name
             * &use_lines
             * &use_docs
             * &use_copy
             * &use_tooltips
             *
             */ 

            window.onload = function() {
                let url_str = window.location.href;
                let url = new URL(url_str);

                let input_str = atob(url.searchParams.get("input_str") || '');
                let snippet_name = atob(url.searchParams.get("snippet_name") || '');
                let use_lines = (url.searchParams.get("use_lines") || true);
                let use_docs = (url.searchParams.get("use_docs") || true);
                let use_copy = (url.searchParams.get("use_copy") || true);
                let use_tooltips = (url.searchParams.get("use_tooltips") || false);

                let gen = gm_generate(input_str,
                    snippet_name,
                    use_lines,
                    use_docs,
                    use_copy,
                    use_tooltips
                );

                let output = {
                    "body": encodeURI(gen.return_html),
                    "head": encodeURI(gen.return_css)
                }

                let formatted = JSON.stringify(output);

                document.getElementsByTagName('p')[0].innerHTML =  formatted;

                // output decoded JSON to the console, for debugging reference
                // console.log(decodeURI(output.body));
                // console.log(decodeURI(output.head));
            }
        </script>
    </head>
    <body>
        <p></p>
    </body>
</html>
module.exports = {
    // module: {
    //     rules: [{
    //         test: /\.scss$/,
    //         use: [{
    //             loader: "style-loader"
    //         }, {
    //             loader: "css-loader"
    //         }, {
    //             loader: "sass-loader",
    //             options: {
    //                 includePaths: ["absolute/path/a", "absolute/path/b"]
    //             }
    //         }]
    //     }]
    // },
    module: {
        rules: [{
            test: /\lion.less$/,
            use: [{
                loader: 'style-loader' // creates style nodes from JS strings
            }, {
                loader: 'css-loader' // translates CSS into CommonJS
            }, {
                loader: 'less-loader' // compiles Less to CSS
            }]
        }]
    }
};

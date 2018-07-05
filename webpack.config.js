module.exports = {
    entry: require.resolve('./src/less/lion.less'),
    output: {
        path: './',
        filename: 'main.css'
    },
    module: {
        rules: [{
            test: /\.less$/,
            loaders: ['style', 'css', 'less']
          }]
    }
};

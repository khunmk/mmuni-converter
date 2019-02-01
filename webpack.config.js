const webpack = require('webpack');
const path = require('path');
const UglifyJsPlugin = require("uglifyjs-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");

const devMode = (process.env.NODE_ENV !== 'production');

module.exports = {
    mode : "development",

    entry : {
        app : [
            './src/js/app.js',
            './src/sass/app.scss',
        ]
    },

    output : {
        path : path.resolve(__dirname, './dist'),
        filename : 'js/[name].js'
    },

    module : {
        rules : [
            {
                test : /\.s[ac]ss$/,
                use : [
                    MiniCssExtractPlugin.loader,
                    "css-loader",
                    "sass-loader"
                ],
            },
            {
                test: /\.(png|jpg|gif|svg|eot|ttf|woff|woff2)$/,
                loader : 'file-loader',
                options : {
                    name : '[name]-[hash].[ext]',
                    outputPath : 'images',
                    publicPath : '../images',
                },
            },
            {
                test : /\.js$/,
                exclude : '/node_modules',
                loader: "babel-loader"
            }
        ]
    },

    plugins : [
        new MiniCssExtractPlugin({
            filename : "css/[name].css"
        })
    ],

    optimization: {
        minimizer: [
            new UglifyJsPlugin({
                cache: true,
                parallel: true,
                sourceMap: true // set to true if you want JS source maps
            }),
            new OptimizeCSSAssetsPlugin({})
        ]
    },
}

if(process.env.NODE_ENV === 'production') {
    module.exports.mode = 'production';
}
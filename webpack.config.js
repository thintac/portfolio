const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const VueLoaderPlugin = require('vue-loader/lib/plugin');

module.exports = {
	mode: 'development',
	devtool: 'source-map',
//	entry: './src/_js/main.js',
	output :{
		path:path.resolve(__dirname,'./dist'),
		filename: './_js/main.js',
	},
	module:{
		rules:[
			{
				test:/\.vue/,
				exclude: /node_modules/,
				use:[
					{
						loader: 'vue-loader',
					}
				],
			},

			{
				test:/\.(css|sass|scss|less)/,
				use:[
					{
						loader:MiniCssExtractPlugin.loader,
					},
					{
						loader:'css-loader',
						options:{
							sourceMap: true,
						},
					},
					{
						loader:'sass-loader',
					},
				],
			},
			{
				test:/\.(jpg|png|jpeg)/,
				type: 'asset/resource',
				generator:{
					filename:'_img/[name][ext]'
				},
				use:[

					// {
					// 	loader: 'file-loader',
					// 	options:{
					// 		esModule:false,
					// 		name:'_img/[name].[ext]',
					// 	},
					// },
					{
						loader:'image-webpack-loader',
					},
				],
			},
		],//rules
	},
	plugins:[
		new VueLoaderPlugin(),
		new MiniCssExtractPlugin({
			filename: './_css/main.css',
		}),
		new CleanWebpackPlugin(),
	],
}

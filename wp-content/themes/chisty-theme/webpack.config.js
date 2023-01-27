const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const path = require('path');

module.exports = {
  target: 'web',
  devtool: 'inline-cheap-module-source-map',
  entry: [
      './src/styles/index.scss',
      './src/scripts/index.js',
    ],
  plugins: [
    new MiniCssExtractPlugin({
      filename: './styles/main.css',
    }),
    new CopyPlugin({
      patterns: [
        {from: 'src/assets/images/', to: 'assets/images'},
      ],
    }),
  ],
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader'],
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          }
        }
      },
      {
        test: /\.(jpe?g|png|gif|svg)$/i, 
        loader: 'file-loader',
        include: path.resolve(__dirname, 'src/assets/images'),
        options: {
          name: '/assets/images/[name].[ext]',
        }
      },
    ],
  },
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: `scripts/[name].js`,
  },
  devServer: {
    port: 8081,
    host: '0.0.0.0',
    allowedHosts: 'all',
    hot: true,
    compress: true,
    open: true,
    watchOptions: {
      poll: true
    },
  },
}
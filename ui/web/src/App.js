import React, { Component } from 'react';
import { connect } from 'react-refetch';
import HtmlToReactParser from 'html-to-react';
import logo from './logo.svg';
import './App.css';

const parser = new HtmlToReactParser.Parser();

class App extends Component {
  render() {
    const { postFetch } = this.props;
    if (postFetch.pending) {
      console.log('pending');
      return (
        <div className="App">
          <div className="App-header">
            <img src={logo} className="App-logo" alt="logo" />
            <h2>Welcome to React</h2>
          </div>
        </div>
      );
    } else if (postFetch.rejected) {
      alert(postFetch.reason);
      return (
        <div className="App">
          <div className="App-header">
            <img src={logo} className="App-logo" alt="logo" />
            <h2>Welcome to React</h2>
          </div>
        </div>
      );
    } else if (postFetch.fulfilled) {
      const reactElement = parser.parse(postFetch.value.posts[0].content);
      return (
        <div className="App">
          <div className="App-header">
            <img src={logo} className="App-logo" alt="logo" />
            <h2>Welcome to React</h2>
          </div>
          { reactElement }
        </div>
      );
    }
  }
}

export default connect(props => ({
  postFetch: `http://localhost:8888/api/get_posts/`,
}))(App);
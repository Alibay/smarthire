import React, { Component } from 'react';
import {
    HashRouter,
    BrowserRouter,
    Route
} from 'react-router-dom';

import { Home } from './pages/Home';
import { SpecialistsPage } from './pages/SpecialistsPage';
import NavBar from './components/shared/NavBar';

import logo from './logo.svg';
import './App.css';

class App extends Component {
  render() {
    return (
      <BrowserRouter>
          <div className="main">
              <NavBar />
              <Route exact path="/" component={Home} />
              <Route exact path="/specialists" component={SpecialistsPage} />
          </div>
      </BrowserRouter>
    );
  }
}

export default App;

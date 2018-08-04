import React, { Component } from 'react';
import { Link } from 'react-router-dom'

const NavBar = () =>
    (<div className="navbar navbar-light navbar-expand-lg bg-light box-shadow">
        <div className="container d-flex justify-content-between">
            <Link to="/" className="navbar-brand d-flex align-items-center"><strong>Smarthire</strong></Link>
            <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span className="navbar-toggler-icon"></span>
            </button>
            <div className="collapse navbar-collapse" id="navbarNavDropdown">
                <ul className="navbar-nav">
                    <li className="nav-item active">
                        <Link to="specialists" className="nav-link">Специалисты <span className="sr-only">(current)</span></Link>
                    </li>
                </ul>
                <ul className="nav justify-content-end">
                    <li className="nav-item dropdown">
                        <a className="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                        </a>
                        <div className="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a className="dropdown-item" href="#">Action</a>
                            <a className="dropdown-item" href="#">Another action</a>
                            <a className="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>)

export default NavBar;
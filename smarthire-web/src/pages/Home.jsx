import React, { Component } from 'react';
import { Link } from 'react-router-dom'

export const Home = () =>
    <div className="container">
        <h1>[Company Website]</h1>
        <nav>
            <Link to="about">[About]</Link>
        </nav>
    </div>
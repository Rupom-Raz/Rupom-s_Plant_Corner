import { Redirect, Route, Switch } from 'react-router-dom'
import "../node_modules/bootstrap/dist/css/bootstrap.min.css"
import React from 'react'

import "../node_modules/bootstrap/dist/js/bootstrap.bundle"
import About from './components/About/About'
import Contact from './components/Contact/Contact'
import Home from './components/Home/Home'
import Cart from './components/Cart/Cart'
import Navbar from './components/Navbar/Navbar'
import PricePlan from './components/PricePlan/PricePlan'
import Registration from './components/Registration/Registration'
import Services from './components/Services/Services'
import Login from './components/Login/Login'
import Footer from './components/Footer/Footer'
import { useState } from 'react'

function App() {
  const [cartNumber, setCardNumber] = useState(0)
  let handleCartNumber = () => {
    setCardNumber(cartNumber + 1)
  }
  return (
    <>

      <Navbar cartNumber={cartNumber} />

      <Switch>
        <Route  exact path="/" component={() => <Home handleCartNumber={handleCartNumber} />}  />
        <Route exact path="/about" component={About} />
        <Route exact path="/services" component={Services} />
        <Route exact path="/price" component={PricePlan} />
        <Route exact path="/contact" component={Contact} />
        <Route exact path="/registration" component={Registration} />
        <Route exact path="/login" component={Login} />
        <Route exact path="/cart" component={Cart} />

        <Redirect to="/" />
      </Switch>
      <Footer />


    </>
  );
}

export default App;

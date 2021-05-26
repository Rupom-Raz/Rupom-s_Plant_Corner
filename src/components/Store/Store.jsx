import React from "react";
import "./Store.css";
import store1 from "../../image/asset 7.jpeg";
import store2 from "../../image/asset 12.jpeg";
import store3 from "../../image/asset 13.jpeg";
import store4 from "../../image/asset 14.jpeg";
import store5 from "../../image/asset 15.jpeg";
import store6 from "../../image/asset 16.jpeg";
import store7 from "../../image/asset 17.jpeg";
import store8 from "../../image/asset 18.jpeg";
import store9 from "../../image/asset 19.jpeg";
import store10 from "../../image/asset 20.jpeg";
import store11 from "../../image/asset 21.jpeg";
import store12 from "../../image/asset 16.jpeg";


const Store = ({handleCartNumber}) => {
  
  return (
    <>
      <div className="container">
        <div className="row store_container">
          <h3>Our Plant's Store</h3>

          <div className="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="single_store">
              <div class="store_item">
                <img src={store1} alt="" />
                <h5>Pramire</h5>
                <p>৳-2000</p>
                <button onClick  = {handleCartNumber} id="btn">Add to cart</button>
              </div>
            </div>
          </div>

          <div className="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="single_store">
              <div class="store_item">
                <img src={store2} alt="" />
                <h5>Ocean Poisonberry</h5>
                <p>৳-400</p>
                <button onClick  = {handleCartNumber} id="btn">Add to cart</button>
              </div>
            </div>
          </div>

          <div className="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="single_store">
              <div class="store_item">
                <img src={store3} alt="" />
                <h5>Bleeding Houseleek</h5>
                <p>৳-1500</p>
                <button onClick  = {handleCartNumber} id="btn">Add to cart</button>
              </div>
            </div>
          </div>

          <div className="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="single_store">
              <div class="store_item">
                <img src={store4} alt="" />
                <h5>Hammer Nightshade</h5>
                <p>৳-2400</p>
                <button onClick  = {handleCartNumber} id="btn">Add to cart</button>
              </div>
            </div>
          </div>

          <div className="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="single_store">
              <div class="store_item">
                <img src={store5} alt="" />
                <h5>Aching Thistle</h5>
                <p>৳-1000</p>
                <button onClick  = {handleCartNumber} id="btn">Add to cart</button>
              </div>
            </div>
          </div>

          <div className="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="single_store">
              <div class="store_item">
                <img src={store6} alt="" />
                <h5>Tiny Wineberry</h5>
                <p>৳-200</p>
                <button onClick  = {handleCartNumber} id="btn">Add to cart</button>
              </div>
            </div>
          </div>

          <div className="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="single_store">
              <div class="store_item">
                <img src={store7} alt="" />
                <h5>Ikririn</h5>
                <p>৳-800</p>
                <button onClick  = {handleCartNumber} id="btn">Add to cart</button>
              </div>
            </div>
          </div>

          <div className="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="single_store">
              <div class="store_item">
                <img src={store8} alt="" />
                <h5>Sheek</h5>
                <p>৳-100</p>
                <button onClick  = {handleCartNumber} id="btn">Add to cart</button>
              </div>
            </div>
          </div>

          <div className="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="single_store">
              <div class="store_item">
                <img src={store9} alt="" />
                <h5>Trehmanor</h5>
                <p>৳-4000</p>
                <button onClick  = {handleCartNumber} id="btn">Add to cart</button>
              </div>
            </div>
          </div>

          <div className="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="single_store">
              <div class="store_item">
                <img src={store10} alt="" />
                <h5>Chruffip</h5>
                <p>৳-300</p>
                <butto onClick  = {handleCartNumber} id="btn">Add to cart</butto>
              </div>
            </div>
          </div>

          <div className="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="single_store">
              <div class="store_item">
                <img src={store11} alt="" />
                <h5>Aithranfanor</h5>
                <p>৳-780</p>
                <button onClick  = {handleCartNumber} id="btn">Add to cart</button>
              </div>
            </div>
          </div>
          

          <div className="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="single_store">
              <div class="store_item">
                <img src={store12} alt="" />
                <h5>Ash Thistle</h5>
                <p>৳-900</p>
                <button onClick  = {handleCartNumber} id="btn">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default Store;

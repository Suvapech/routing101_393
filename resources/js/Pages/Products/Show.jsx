import { Link } from '@inertiajs/react';
import './Show.css';

export default function Show({ product }) {
    return (
        <div>
            <div className="main-container">
                <div className="product-c">
                    <img
                        src={product.image}
                        alt={product.name}
                        className="product-im"
                    />
                    <h1>{product.name}</h1>
                    <p>{product.description}</p>
                    <p>Price : ฿ {product.price}</p>
                    <Link href="/products" className="product-i">Back to All Products</Link>
                </div>
            </div>
        </div>
    );
}

import { Link } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'; //หากยังไม่ล็อกอินจะไม่สามารถดูได้
import './Index.css'; // Import styles

export default function Index({ products }) {
    return (
        <AuthenticatedLayout>
            <>
                <div className="page-title-container">
                    <h1 className="page-title">Bike Shop</h1>
                </div>
                <div className="product-container">
                    {products.map((product) => (
                        <div key={product.id} className="product-item">
                            <Link href={`/products/${product.id}`} className="product-link">
                                <img
                                    src={product.image}
                                    alt={product.name}
                                    className="product-image"
                                />
                                <div>
                                    <h2 className="product-title">{product.name}</h2>
                                    <p className="product-price">฿ {product.price}</p>
                                </div>
                            </Link>
                        </div>
                    ))}
                </div>
            </>
        </AuthenticatedLayout>
    );
}

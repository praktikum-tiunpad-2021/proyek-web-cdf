import { Link } from "react-router-dom";
import logo from "../assets/img/gopher.png"

const LandingPage = () => {
    return (
        <main className="landing-page">
            <Link to="/login">
                <button>Login</button>
            </Link>
            <section>
                <img src={logo} />
            </section>
        </main>
    );
}
 
export default LandingPage;
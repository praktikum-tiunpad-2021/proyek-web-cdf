import useFetch from "../hooks/useFetch";

const Login = () => {
    // const data = useFetch();

    return (
        <main className="login-page">
            <section>
                <button onClick={useFetch}>Login</button>
            </section>
        </main>
    );
}
 
export default Login;